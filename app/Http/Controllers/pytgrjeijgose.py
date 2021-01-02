
n=int(input())
a = []
#リストAにappend()を使って格納していく
for _ in range(n):
    a.append(input())
B=[]
for i in range(n):
    if a[i][0]=="!":
       b=a[i].replace('!', '')
       b=b+"!"
    else:
        b=a[i]
    B.append(b)
B=sorted(B)
print(B)
ans=0
for i in range(n-1):

    if B[i]+"!"==B[i+1]:
        print(B[i])
        ans+=1
        break
if ans==0:
    print("satisfiable")
    
