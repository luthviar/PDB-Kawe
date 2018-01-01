# inisiasi variable dataset
dataset1 = cleaningset2
dataset2 = model.transform(final_data_clean)

# start code for dataset2
from pyspark.sql import Row
from pyspark.sql.types import StructField, StructType, LongType

row = Row("foo", "bar")
row_with_index = Row(*["id"] + dataset2.columns)

def make_row(columns):
    def _make_row(row, uid):
        row_dict = row.asDict()
        return row_with_index(*[uid] + [row_dict.get(c) for c in columns])
    return _make_row

f = make_row(dataset2.columns)

df_with_pk2 = (dataset2.rdd
    .zipWithUniqueId()
    .map(lambda x: f(*x))
    .toDF(StructType([StructField("id", LongType(), False)] 
                     + dataset2.schema.fields)))
##############################################################################
# start code for dataset1
from pyspark.sql import Row
from pyspark.sql.types import StructField, StructType, LongType

row = Row("foo", "bar")
row_with_index = Row(*["id"] + dataset1.columns)

def make_row(columns):
    def _make_row(row, uid):
        row_dict = row.asDict()
        return row_with_index(*[uid] + [row_dict.get(c) for c in columns])
    return _make_row

f2 = make_row(dataset1.columns)

df_with_pk1 = (dataset1.rdd
    .zipWithUniqueId()
    .map(lambda x: f2(*x))
    .toDF(StructType([StructField("id", LongType(), False)] 
                     + dataset1.schema.fields)))

# melakukan join, estimated execution: 20 min
joined = df_with_pk1.join(df_with_pk3, ["id"]) 

# melakukan displaying, estimated execution: 20 min
display(joined)

# total waktu dieksekusi kedua baris itu ialah: 40 min
total_after_join = str(joined.count())
# print("total baris setelah join: "+ )

# Menampilkan banyaknya per jenis kriminal pada 9 hasil cluster versi 1
display(joined.orderBy("prediction").groupBy("id","Month","Year","Reported by","Falls within","Longitude","Latitude","Location","LSOA code","LSOA name","Crime type","Last outcome category","features","prediction").count())