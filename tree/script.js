class Node {
    constructor(value, x, y) {
        this.value = value;
        this.left = null;
        this.right = null;
        this.x = x;
        this.y = y;
    }
}

class BinarySearchTree {
    constructor() {
        this.root = null;
        this.svg = document.getElementById('tree');
    }

    insert(value) {
        if (this.root === null) {
            this.root = new Node(value, 400, 50);
            this.render();
        } else {
            this.insertNode(this.root, value, 400, 50, 200);
        }
    }

    insertNode(node, value, x, y, offset) {
        if (value < node.value) {
            if (node.left === null) {
                node.left = new Node(value, x - offset, y + 80);
                this.render();
            } else {
                this.insertNode(node.left, value, x - offset, y + 80, offset / 2);
            }
        } else {
            if (node.right === null) {
                node.right = new Node(value, x + offset, y + 80);
                this.render();
            } else {
                this.insertNode(node.right, value, x + offset, y + 80, offset / 2);
            }
        }
    }

    search(value) {
        const node = this.searchNode(this.root, value);
        if (node !== null) {
            alert("Angka ditemukan: " + node.value);
            this.highlightNode(node);
        } else {
            alert("Angka tidak ditemukan!");
        }
    }

    searchNode(node, value) {
        if (node === null) return null;
        if (value < node.value) {
            return this.searchNode(node.left, value);
        } else if (value > node.value) {
            return this.searchNode(node.right, value);
        } else {
            return node;
        }
    }

    render() {
        this.svg.innerHTML = '';
        this.renderNode(this.root);
    }

    renderNode(node) {
        if (node !== null) {
            if (node.left !== null) {
                this.drawLine(node, node.left);
                this.renderNode(node.left);
            }
            if (node.right !== null) {
                this.drawLine(node, node.right);
                this.renderNode(node.right);
            }
            this.drawNode(node);
        }
    }

    remove(value) {
        this.root = this.removeNode(this.root, value);
        this.render();
    }

    removeNode(node, value) {
        if (node === null) {
            return null;
        }
        if (value < node.value) {
            node.left = this.removeNode(node.left, value);
            return node;
        } else if (value > node.value) {
            node.right = this.removeNode(node.right, value);
            return node;
        } else {
            if (node.left === null && node.right === null) {
                return null;
            }
            if (node.left === null) {
                return node.right;
            }
            if (node.right === null) {
                return node.left;
            }

            const minRightNode = this.findMinNode(node.right);
            node.value = minRightNode.value;
            node.right = this.removeNode(node.right, minRightNode.value);
            return node;
        }
    }

    findMinNode(node) {
        while (node.left !== null) {
            node = node.left;
        }
        return node;
    }

    drawNode(node) {
        const circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
        circle.setAttribute("cx", node.x);
        circle.setAttribute("cy", node.y);
        circle.setAttribute("r", 20);
        circle.classList.add("circle");

        const text = document.createElementNS("http://www.w3.org/2000/svg", "text");
        text.setAttribute("x", node.x);
        text.setAttribute("y", node.y + 5); // Shift the text a bit down
        text.setAttribute("text-anchor", "middle");
        text.setAttribute("fill", "white"); // Set text color
        text.textContent = node.value;

        this.svg.appendChild(circle);
        this.svg.appendChild(text);
    }

    drawLine(parent, child) {
        const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
        line.setAttribute("x1", parent.x);
        line.setAttribute("y1", parent.y);
        line.setAttribute("x2", child.x);
        line.setAttribute("y2", child.y);
        line.classList.add("line");
        this.svg.appendChild(line);
    }

    highlightNode(node) {
        const circles = this.svg.querySelectorAll("circle");
        circles.forEach(circle => {
            circle.setAttribute("class", "circle");
        });
        const circle = this.svg.querySelector(`circle[cx="${node.x}"][cy="${node.y}"]`);
        if (circle) {
            circle.setAttribute("class", "highlight");
        }
    }
}

const bst = new BinarySearchTree();

function insertValue() {
    const value = parseInt(document.getElementById('value').value);
    if (!isNaN(value)) {
        bst.insert(value);
        document.getElementById('value').value = '';
    }
}

function searchValue() {
    const value = parseInt(document.getElementById('value').value);
    if (!isNaN(value)) {
        bst.search(value);
        document.getElementById('value').value = '';
    }
}

function removeValue() {
    const value = parseInt(document.getElementById('value').value);
    if (!isNaN(value)) {
        bst.remove(value);
        document.getElementById('value').value = '';
    }
}
