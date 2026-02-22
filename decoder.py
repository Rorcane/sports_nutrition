def caesar_cipher(text, shift):
    result = ""
    for char in text:
        if char.isalpha():
            shift_base = 65 if char.isupper() else 97
            result += chr((ord(char) - shift_base + shift) % 26 + shift_base)
        else:
            result += char
    return result

def caesar_decipher(text, shift):
    result = ""
    for char in text:
        if char.isalpha():
            shift_base = 65 if char.isupper() else 97
            result += chr((ord(char) - shift_base - shift) % 26 + shift_base)
        else:
            result += char
    return result

text = "alone in the dark"
shift = 8

encrypted_text = caesar_cipher(text, shift)
print("Шифрланған сөз:", encrypted_text)

decrypted_text = caesar_decipher(encrypted_text, shift)
print("Шифрды шешу:", decrypted_text)
