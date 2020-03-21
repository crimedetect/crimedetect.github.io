from DetectionOfCopyMoveForgery import *
import argparse

def getFmeasure(orginal_img, test_img, width, height):

    DP=0
    YP=0
    YN=0
    for i in range(height):
        for j in range(width):
            if orginal_img[i][j]==255 and test_img[i][j]==255:
                DP +=1
            if orginal_img[i][j]==0 and test_img[i][j]==255:
                YP +=1
            if orginal_img[i][j]==255 and test_img[i][j]==0:
                YN +=1

    precision =DP/(DP+YP)
    recall =DP/(DP+YN)

    return 2*((precision*recall)/(precision+recall))
    
#for i in range(160,0,-2):
#    path ="sample_images/"+str(i)+".png"
#    img = cv2.imread(r"C:\\Desertforged.jpg",0)
#    height, width= img.shape
    # (img, height, width, blocksize, oklid_threshold, correlation_threshold, vec_len_threshold, num_ofvector_threshold)
#   asd = DetectionofCopyMoveForgery(img, height, width, 8,3.5,8,100,5)
#    asd.detection_forgery()
#    cv2.waitKey(0)
#    path = "forged_images/" + str(i-1) + ".png"
#    original_img = cv2.imread(r"C:\\Desertforged.jpg",0)
#    print(getFmeasure(original_img,img,width,height))


ap = argparse.ArgumentParser()
ap.add_argument("-i", "--image", required=True, help="Path to the image")
args = vars(ap.parse_args())
inp = args["image"]
img = cv2.imread(inp ,0)
height = img.shape[0]
width = img.shape[1]
# (img, height, width, blocksize, oklid_threshold, correlation_threshold, vec_len_threshold, num_ofvector_threshold)
asd = DetectionofCopyMoveForgery(img, height, width, 8,3.5,8,100,5)
asd.detection_forgery()
cv2.waitKey(0)
original_img = cv2.imread(r"C:\\Desert.jpg",0)
print(getFmeasure(original_img,img,width,height))
cv2.destroyAllWindows()









