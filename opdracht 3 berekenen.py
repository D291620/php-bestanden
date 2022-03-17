print ("welkom bij de kaartjes verkoop!")
aantal= input("Hoeveel kaartjes wilt u bestellen?")

input = antwoord

if aantal == "1":
    antwoord = antwoord * 20.00
    print (antwoord)

if aantal <= "5":
    antwoord = antwoord *15.00
    print (antwoord)

if aantal >= "5":
    antwoord = antwoord * 12.50
    print (antwoord)