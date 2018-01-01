from pyspark.sql import SparkSession
from pyspark.ml.clustering import KMeans
from pyspark.ml.feature import VectorAssembler

# inisiasi appname
spark = SparkSession.builder.appName('cluster').getOrCreate()

# mengambil data csv yang merupakan dataset berupa lat, lng, 
# membuat jadi bertipe data double
dataclean = cleaningset2.select("Longitude","Latitude")

# set up menjadi 9 cluster dengan kmeans
kmeans = KMeans().setK(9).setSeed(1)

# inisiasi menambahkan atribut features yang dimana 
# atribut features yaitu memiliki value array of lat,lng
assembler = VectorAssembler(inputCols=dataclean.columns, 
                            outputCol = 'features')

# jadi punya kolom features
final_data_clean = assembler.transform(dataclean)

# inisiasi kmeans dengan mengeksekusi 
# pada kolom bernama features
kmeans = KMeans(featuresCol='features',k=9)

model = kmeans.fit(final_data_clean)

display(model.transform(final_data_clean))

centers = model.clusterCenters()
size_summary = model.summary.cluster
total_data = model.summary.clusterSizes
total_cost = model.computeCost(final_data_clean)

print("center "+ str(centers) +"\n")
print("total_data "+ str(total_data) + "\n")
print("total_cost "+ str(total_cost) + "\n")
print("size_summary " + str(size_summary) + "\n")
print("total baris setelah modeling with kmeans: "+ 
      str(final_data_clean.count()))