import random
from math import gcd

def is_prime(num):
    if num < 2:
        return False
    for i in range(2, int(num ** 0.5) + 1):
        if num % i == 0:
            return False
    return True

def extended_gcd(a, b):
    if b == 0:
        return a, 1, 0
    gcd_val, x1, y1 = extended_gcd(b, a % b)
    x = y1
    y = x1 - (a // b) * y1
    return gcd_val, x, y

def generate_rsa_keys(bits=8):
    p = q = 1
    while not is_prime(p):
        p = random.getrandbits(bits)
    while not is_prime(q) or p == q:
        q = random.getrandbits(bits)
    n = p * q
    phi_n = (p - 1) * (q - 1)
    
    e = random.randint(2, phi_n - 1)
    while gcd(e, phi_n) != 1:
        e = random.randint(2, phi_n - 1)

    _, d, _ = extended_gcd(e, phi_n)
    d = d % phi_n
    
    public_key = (e, n)
    private_key = (d, n)
    
    return public_key, private_key

def encrypt(message, public_key):
    e, n = public_key
    return [pow(ord(char), e, n) for char in message]

def decrypt(encrypted_message, private_key):
    d, n = private_key
    return ''.join([chr(pow(char, d, n)) for char in encrypted_message])

public_key, private_key = generate_rsa_keys(bits=8)
message = "lab work rsa"
print(f"Шифрлау алдында хабар: {message}")

encrypted_message = encrypt(message, public_key)
print(f"Шифрланған хабар: {encrypted_message}")

decrypted_message = decrypt(encrypted_message, private_key)
print(f"Керішифрланған хабар: {decrypted_message}")