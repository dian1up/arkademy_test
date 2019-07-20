import re
def passw(x):
    xa = re.search("^\d","[a-z]","[A-Z]", x)

    if (xa):
        print("YES! We have a match!")
    else:
        print("No match")

passw("/daT")
