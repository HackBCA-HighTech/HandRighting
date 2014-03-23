from PIL import Image

def proportion(filename):
	img = Image.open(filename)
	w, h = img.size
	if w>=h:
		propFact = float(w) / float(h)
	if w<h:
		propFact = -1 * float(h) / float(w)
	return propFact