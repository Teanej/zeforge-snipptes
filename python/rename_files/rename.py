# da bismo preimenovali fajlove
# moramo uključiti 'os' Python biblioteku
import os

# pravimo dvije varijable u koje pohranjujemo 
# putanje do fajlova koje želimo preimenovati
stari_naziv = r"C:\Users\Amar-\Desktop\stari_naziv.txt"
novi_naziv = r"C:\Users\Amar-\Desktop\novi_naziv.txt"

# varijable prosljeđujemo rename metodi
# 'os' biblioteke, koja zapravo mijenja 
# nazive fajlova
os.rename(stari_naziv, novi_naziv)