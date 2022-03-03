import numpy as np
import random
import pandas as pd
import cv2
img = cv2.imread('lena.jpg', 1)

# numpy method - zeros method
# img = np.zeros([512, 512, 3], np.uint8)

# img = cv2.line(img, (0,0), (255,255), (0, 0, 255), 2) # color in BGR format

# img = cv2.arrowedLine(img, (0,255), (255,255), (255, 0, 0), 2) 

img = cv2.rectangle(img,(380,0), (255,120), (0, 0, 255), 2 )

# img = cv2.circle(img, (447,63), 63, (0, 255, 0), 2)

font= cv2.FONT_HERSHEY_SIMPLEX
string = 'name'


cord = (100, 400)
font_sc = random.randint(1, 5)
color2 = np.random.randint(0, 255, size=(3, ))
r_color2 = ( int (color2 [ 0 ]), int (color2 [ 1 ]), int (color2 [ 2 ])) 
random_thick2 = random.randint(1, 10)

img = cv2.putText(img, string, cord, font, font_sc, r_color2, random_thick2, cv2.LINE_AA)

cv2.imshow('image', img)

cv2.waitKey(0)
cv2.destroyAllWindows()