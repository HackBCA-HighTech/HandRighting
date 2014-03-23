from PIL import Image

def proportion(img):
	w, h = img.size
	propFact = float(w) / float(h)

	return propFact