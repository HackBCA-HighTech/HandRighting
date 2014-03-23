import sys
import os

dirr = os.path.dirname(__file__)
filename = os.path.join(dirr, '../../libraries')
sys.path.append(filename)

dirr = os.path.dirname(__file__)
filename = os.path.join(dirr, '..')
sys.path.append(filename)