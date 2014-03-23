import os, sys, json
dirr = os.path.dirname(sys.argv[0])
filename = os.path.join(dirr, '../../libraries')
sys.path.append(filename)

dirr = os.path.dirname(sys.argv[0])
filename = os.path.join(dirr, '../imageProcess')
sys.path.append(filename)

import preprocessing, proportion, centroid, meanStDev

times = json.loads(sys.argv[1])
NUMDEVS = 3
imgArray = ['filename_1.png', 'filename_2.png', 'filename_3.png', 'filename_4.png', 'filename_5.png', 'filename_6.png', 'filename_7.png', 'filename_8.png', 'filename_9.png', 'filename_10.png']
dirr = os.path.dirname(sys.argv[0])
filename = os.path.abspath(os.path.join(dirr, '../../../img/generated_canvas'))
centroidsX = []
centroidsY = []
proportions = []

for img in imgArray:
	fileTemp = os.path.join(filename, img)
	imgTemp = preprocessing.preprocessing(fileTemp)
	imgTemp.save('fart.png')
	proportions.append(proportion.proportion(imgTemp))
	centroidsX.append(centroid.centroid(imgTemp)[0])
	centroidsY.append(centroid.centroid(imgTemp)[1])


meanProps, devProps = meanStDev.meanStDev(proportions)
meanCentsX, devCentsX = meanStDev.meanStDev(centroidsX)
meanCentsY, devCentsY = meanStDev.meanStDev(centroidsY)
meanTimes, devTimes = meanStDev.meanStDev(times)

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
