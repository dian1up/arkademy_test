from random import randint
inputs=input("Masukkan Inputan Min 2 Karakter= ")
panjang=len(inputs);
flag=1
random=randint(2,panjang)
print(random)
output=""
for hasil in inputs:
    output=output+hasil
    if flag==random:
        output=output+","    
        panjang=panjang-random
        flag=0
    flag=flag+1
ouputnya=output.split(",")
print (ouputnya)
