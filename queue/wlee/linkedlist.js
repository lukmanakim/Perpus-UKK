class Node {
    constructor(value) {
        this.value = value;
        this.next = null;
    }
}

class LinkedList {
    constructor() {
        this.head = null;
    }

    append(value) {
        const newNode = new Node(value);
        if (!this.head) {
            this.head = newNode;
        } else {
            let current = this.head;
            while (current.next) {
                current = current.next;
            }
            current.next = newNode;
        }
        this.updateDisplay();
    }

    clear() {
        this.head = null;
        this.updateDisplay();
    }

    updateDisplay() {
        const display = document.getElementById('listDisplay');
        let current = this.head;
        let output = '';

        while (current) {
            output += current.value + ' -> ';
            current = current.next;
        }

        output += 'null';
        display.textContent = output;
    }

    search(key) {
        let current = this.head;
        while (current) {
            if (current.data === key) {
                return true;
            }
            current = current.next;
        }
        return false;
    }
}


const linkedList = new LinkedList();

// tambah
document.getElementById('addButton').addEventListener('click', () => {
    const input = document.getElementById('inputValue');
    const value = input.value.trim();
    if (value) {
        linkedList.append(value);
        input.value = '';
    } else {
        alert('Masukkan valuenya!!!.');
    }
});

//clear
document.getElementById('clearButton').addEventListener('click', () => {
    linkedList.clear();
});

//cari
document.getElementById('searchButton').addEventListener('click', () => {
    const input = document.getElementById('inputValue');
    const value = input.value.trim();
    if (!isNaN(value)) {
        const found = linkedList.search(value);
        const result = found ? 'Elemen ketemu.' : 'Elemen gak ketemu.';
        document.getElementById('output'),textContent = result;
    } 
});