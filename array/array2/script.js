let matrix = [];
let rows = 3;
let cols = 3;

function createMatrix() {
    rows = parseInt(document.getElementById('rows').value);
    cols = parseInt(document.getElementById('cols').value);
    matrix = Array.from({ length: rows }, () => Array(cols).fill(0));
    displayMatrix();
}

function displayMatrix() {
    const matrixContainer = document.getElementById('matrix');
    matrixContainer.innerHTML = ''; // Clear the container

    // Set grid template to have a dynamic number of columns (based on user input)
    matrixContainer.style.gridTemplateColumns = `repeat(${cols}, auto)`;

    for (let colIndex = 0; colIndex < cols; colIndex++) {
        for (let rowIndex = 0; rowIndex < rows; rowIndex++) {
            const cellDiv = document.createElement('div');
            cellDiv.className = 'cell';
            const input = document.createElement('input');
            input.type = 'text';
            input.value = matrix[rowIndex][colIndex];
            input.onchange = function () {
                updateCell(rowIndex, colIndex, input.value);
            };
            cellDiv.appendChild(input);
            matrixContainer.appendChild(cellDiv);
        }
    }
}

function addColumn() {
    matrix.forEach(row => row.push(0)); // Add new column to each row
    cols++;
    displayMatrix();
}

function deleteColumn() {
    if (cols > 1) {
        matrix.forEach(row => row.pop()); // Remove last column from each row
        cols--;
        displayMatrix();
    } else {
        alert('You must have at least one column.');
    }
}

function resetMatrix() {
    rows = 3;
    cols = 3;
    matrix = Array.from({ length: rows }, () => Array(cols).fill(0));
    document.getElementById('rows').value = rows;
    document.getElementById('cols').value = cols;
    displayMatrix();
}

function updateCell(rowIndex, colIndex, value) {
    matrix[rowIndex][colIndex] = value; // Update the value in the matrix
}
