from pyspark.ml.feature import StandardScaler

scaler = StandardScaler(inputCol='features', 
                        outputCol='scaledFeatures')

scaler_model = scaler.fit(final_data3)

final_data4 = scaler_model.transform(final_data3)

kmeans99 = KMeans(featuresCol='scaledFeatures',k=9)

model99 = kmeans99.fit(final_data4)

print('WSSSE')
print(model99.computeCost(final_data4))
print('center : '+str(model99.clusterCenters()))

display(model99.transform(final_data4))