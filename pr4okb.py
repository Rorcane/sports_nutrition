import random
import string

def generate_password(length, alphabet):
    """Кездейсоқ құпиясөз генерациялау функциясы."""
    return ''.join(random.choice(alphabet) for _ in range(length))

alphabet_26 = string.ascii_lowercase 
alphabet_36 = string.ascii_lowercase + string.digits  
alphabet_62 = string.ascii_letters + string.digits  

print("Құпиясөз ұзындығын таңдаңыз:")
print("1 - 26 таңбалы әліпбиде (7 таңба)")
print("2 - 36 таңбалы әліпбиде (6 таңба)")
print("3 - 62 таңбалы әліпбиде (5 таңба)")

choice = int(input("Таңдаңыз (1, 2 немесе 3): "))

if choice == 1:
    L = 7
    chosen_alphabet = alphabet_26
elif choice == 2:
    L = 6
    chosen_alphabet = alphabet_36
elif choice == 3:
    L = 5
    chosen_alphabet = alphabet_62
else:
    print("Қате таңдау!")
    exit()


generated_password = generate_password(L, chosen_alphabet)
print(f"Генерацияланған құпиясөз: {generated_password}")
