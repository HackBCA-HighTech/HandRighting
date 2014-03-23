import imageProcess
import os, sys, json

times = json.loads(sys.argv[1])
NUMDEVS = 2
os.system("setPath.py")
imgArray = ['filename_1.png', 'filename_2.png', 'filename_3.png', 'filename_4.png', 'filename_5.png', 'filename_6.png', 'filename_7.png', 'filename_8.png', 'filename_9.png', 'filename_10.png']
dirr = os.path.dirname(__file__)
filename = os.path.join(dirr, '../../../imgs/generated_canvas')
centroidsX = []
centroidsY = []
proportions = []

for img in imgArray:
 	fileTemp = os.path.join(filename, img)
 	imgTemp = imageProcess.preprocessing(fileTemp)
 	proportions.append(imageProcess.proportion(imgTemp))
	centroidsX.append(imageProcess.centroid(imgTemp)[0])
 	centroidsY.append(imageProcess.centroid(imgTemp)[1])


meanProps, devProps = imageProcess.meanStDev(proportions)
meanCentsX, devCentsX = imageProcess.meanStDev(centroidsX)
meanCentsY, devCentsY = imageProcess.meanStDev(centroidsY)
meanTimes, devTimes = imageProcess.meanStDev(times)

minProps = meanProps - (NUMDEVS * devProps)
maxProps = meanProps + (NUMDEVS * devProps)
resultsProps = [minProps, maxProps]

minCentsX = meanCentsX - (NUMDEVS * devCentsX)
maxCentsX = meanCentsX + (NUMDEVS * devCentsX)
resultsCentsX = [minCentsX, maxCentsX]

minCentsY = meanCentsY - (NUMDEVS * devCentsY)
maxCentsY = meanCentsY + (NUMDEVS * devCentsY)
resultsCentsY = [minCentsY, maxCentsY]

minTimes = meanTimes - (NUMDEVS * devTimes)
maxTimes = meanTimes + (NUMDEVS * devTimes)
resultsTimes = [minTimes, maxTimes]

result = {
	'propsRange' : resultsProps,
	'centsXRange' : resultsCentsX,
	'centsYRange' : resultsCentsY,
	'timesRange' : resultsTimes
}

print json.dumps(result)