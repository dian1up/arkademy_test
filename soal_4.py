from math import ceil
def makanan(harga,kode,jarak,pajak):
    H_jarak=0
    H_pajak=0
    H_makanan=int(harga)
    Diskon=0
    kode=str(kode)
    kode.strip()
    jarak=int(jarak)
    if jarak<=1.5:
        H_jarak=5000
    else:
        T_jarak=ceil(jarak-1.5)
        H_jarak=(T_jarak*3000)+5000
        
    if kode=="ARKAFOOD5":
        if H_makanan>=50000:
            Diskon=(50/100)*H_makanan
            if Diskon>50000:
                Diskon=50000
    elif kode=="DITRAKTIRDEMY":
        if H_makanan>=25000:
            Diskon=(60/100)*H_makanan
            if Diskon>=30000:
                Diskon=30000
    
    if pajak==True:
        H_pajak=(5/100)*H_makanan
    Total=H_makanan-Diskon+H_jarak+H_pajak
    return Total

if __name__ == '__main__':    
    print(makanan(75000,"ARKAFOOD5",5,False))
