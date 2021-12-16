import sys
humidity9am = sys.argv[1]
humidity3am = sys.argv[2]
rainfall = sys.argv[3]
sunshine = sys.argv[4]
cloud3pm = sys.argv[5]

import numpy as np
import pickle

pkl_filename1 = "predict/Model_Prediksi_RainToday_5_Variabel.pkl"
pkl_filename2 = "predict/Model_Prediksi_RainTomorrow_5_Variabel.pkl"

#masukkan model raintoday
with open(pkl_filename1, 'rb') as file:  
    rain_today_model = pickle.load(file)


#masukkan model raintomorrow
with open(pkl_filename1, 'rb') as file:  
    rain_tomorrow_model = pickle.load(file)

arr = np.array([[rainfall, sunshine, humidity9am, humidity3am, cloud3pm]])
predRainToday = rain_today_model.predict(arr)
#print(predRainToday[0])

arr = np.array([[rainfall, sunshine, humidity9am, humidity3am, cloud3pm]])
predRainTomorrow = rain_today_model.predict(arr)
#print(predRainTomorrow[0])
result = []
result.append(predRainToday[0])
result.append(predRainTomorrow[0])
print(result)