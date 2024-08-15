import tkinter as tk
from tkinter import messagebox

class Piskvorky:
    def __init__(self):
        self.root = tk.Tk()
        self.root.title("Piškvorky")
        self.pole = ['' for _ in range(9)]
        self.tahy = 0
        self.hrac = 'X'
        self.buttony = []
        for i in range(3):
            radek = []
            for j in range(3):
                button = tk.Button(self.root, command=lambda row=i, column=j: self.klik(row, column), height=3, width=6)
                button.grid(row=i, column=j)
                radek.append(button)
            self.buttony.append(radek)
        self.root.mainloop()

    def klik(self, row, column):
        if self.pole[row*3 + column] == '':
            self.pole[row*3 + column] = self.hrac
            self.buttony[row][column].config(text=self.hrac)
            self.tahy += 1
            if self.vyhodnot():
                messagebox.showinfo("Konec hry", f"Hráč {self.hrac} vyhrál!")
                self.root.quit()
            elif self.tahy == 9:
                messagebox.showinfo("Konec hry", "Remíza!")
                self.root.quit()
            self.hrac = 'O' if self.hrac == 'X' else 'X'

    def vyhodnot(self):
        # Kontrola řádků
        for i in range(3):
            if self.pole[i*3] == self.pole[i*3+1] == self.pole[i*3+2]!= '':
                return True
        # Kontrola sloupců
        for i in range(3):
            if self.pole[i] == self.pole[i+3] == self.pole[i+6]!= '':
                return True
        # Kontrola diagonál
        if self.pole[0] == self.pole[4] == self.pole[8]!= '':
            return True
        if self.pole[2] == self.pole[4] == self.pole[6]!= '':
            return True
        return False

Piskvorky()