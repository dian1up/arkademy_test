def fibonacci(x):
    jml_deret=int(x)
    count=1
    n1=0
    n2=1
    hasil=""
    jml=0
    while True:
        un=n1+n2
        if un>jml_deret:
            break
        else:
            n1=n2
            n2=un
            hasil=hasil+str(un)
            hasil=hasil+","
            count +=1
    hasil=hasil.split(",")
    hasil.remove("")
    return hasil

def genap(x):
    hasil=0
    for i in x:
        if int(i)%2 == 0:
            hasil=hasil+int(i)
    return hasil

def ganjil(x):
    hasil=0
    for i in x:
        if int(i)%2 != 0:
            hasil=hasil+int(i)
    return hasil

inputs=input("Masukkan Inputan Jumlah Deret Angka= ")
print("Banyak Deret = "+inputs)
print("Deret fibonacci = "+str(fibonacci(inputs)))
print("Hasil Genap = "+str(genap(fibonacci(inputs))))
print("Hasil Ganjil = "+str(ganjil(fibonacci(inputs))))
