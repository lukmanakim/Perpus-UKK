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

    add(value) {
        const newNode = new Node(value);
        if (!this.head) {
            this.head = newNode;
            return;
        }
        let current = this.head;
        while (current.next) {
            current = current.next;
        }
        current.next = newNode;
    }

    remove() {
        if (!this.head) return;

        if (!this.head.next) {
            this.head = null;
            return;
        }

        let current = this.head;
        while (current.next && current.next.next) {
            current = current.next;
        }
        current.next = null;
    }

    display() {
        let result = '';
        let current = this.head;
        while (current) {
            result += current.value + ' -> ';
            current = current.next;
        }
        result += 'NULL';
        return result;
    }
}

const linkedList = new LinkedList();

function addNode() {
    const nodeValue = document.getElementById('nodeValue').value;
    if (nodeValue) {
        linkedList.add(nodeValue);
        document.getElementById('nodeValue').value = '';
        updateDisplay();
    }
}

function removeNode() {
    linkedList.remove();
    updateDisplay();
}

function updateDisplay() {
    document.getElementById('linkedListDisplay').innerText = linkedList.display();
}
