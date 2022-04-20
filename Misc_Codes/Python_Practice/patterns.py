# Problem: Pattern Generation

# Write a function to generate this pattern:
# 1
# 2 3
# 4 5 6

# Now change the code to output
# 1
# 1 2
# 1 2 3

def pyramid1(n):
    num = 1
    for i in range(0,n):
        for j in range(0,i+1):
            print(num, end=" ")
            num += 1
        print('\r')

def pyramid2(n):
    i = 1
    j = 1
    while i < n:
        for k in range(1,j):
            print(k, end=' ') 
            i += 1
        print(" ")
        j +=1

pyramid1(3)
print("\n")
pyramid2(6)
