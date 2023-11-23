// Get all the table containers
const containers = document.querySelectorAll('.table-container');

// Loop through each container
containers.forEach(container => {
  // Get the table and button elements for this container
  const table = container.querySelector('table');
  const button = document.createElement('button');
  button.innerText = 'Show Details';

  // Add the button to the container
  container.insertBefore(button, table);

  // Add click event listener to the button
  button.addEventListener('click', function() {
    const childTable = container.querySelector('.new-table');
    if (childTable.style.display === 'none') {
      childTable.style.display = 'table';
      button.innerText = 'Hide Details';
    } else {
      childTable.style.display = 'none';
      button.innerText = 'Show Details';
    }
  });
});
const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');

// Search through the table for the input value
function searchTable(event) {
  const searchValue = event.target.value.toLowerCase();
  const tables = document.querySelectorAll('.reservations table');
  tables.forEach(table => {
    const rows = table.querySelectorAll('tbody tr.row1');
    let foundMatch = false;
    rows.forEach(row => {
      const clientName = row.children[1].textContent.toLowerCase();
      if (clientName.includes(searchValue)) {
        foundMatch = true;
      }
    });
    if (foundMatch) {
      table.style.display = '';
    } else {
      table.style.display = 'none';
    }
  });
}

// Attach the searchTable function to the search button and input field
searchButton.addEventListener('click', searchTable);
searchInput.addEventListener('keyup', searchTable);
