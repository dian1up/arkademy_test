def deret(oprt,jml,deret):
    jml=int(jml)+1
    data=""
    oprt=oprt.upper()
    oprt=oprt.strip()
    for i in range(0,jml):
        data=data+str(i)
    print("data = ",data)

    if oprt=="SUM":
        H_SUM=0
        flag=0
        for i in deret:
            if flag==0:
                H_SUM=data[i]
                flag=1 
            else:
                H_SUM=int(H_SUM)+int(data[i])
        print("OUTPUT = ",H_SUM)

    elif oprt=="MUL":
        H_MUL=0
        flag=0
        for i in deret:
            if flag==0:
                H_MUL=data[i]
                flag=1
            else:
                H_MUL=int(H_MUL)*int(data[i])
        print("OUTPUT = ",H_MUL)
      
    elif oprt=="SUB":
        H_SUB=0
        flag=0
        for i in deret:
            if flag==0:
                H_SUB=data[i]
                flag=1
            else:
                H_SUB=int(H_SUB)-int(data[i])
        print("OUTPUT = ",H_SUB)
        
    elif oprt=="DIV":
        H_DIV=0
        flag=0
        for i in deret:
            if flag==0:
                H_DIV=data[i]
                flag=1
            else:
                H_DIV=float(H_DIV)/float(data[i])
        print("OUTPUT = ",H_DIV)
        
deret("DIV",20,[12,15,12])
