import numpy

def meanStDev(array):
	stDev = numpy.std(array)
	mean = numpy.mean(array)
	return mean, stDev