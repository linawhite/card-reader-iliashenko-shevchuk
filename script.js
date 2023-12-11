const tableBox = document.getElementById("table");

const users = await Func()
    .then((data) => {
        return Object.values(data)[0];
    })
    .catch((error) => {
        console.error("Error processing users.json data:", error);
    });

function Func() {
    return fetch("./users.json")
        .then((res) => {
            if (!res.ok) {
                throw new Error(`HTTP error! Status: ${res.status}`);
            }
            return res.json();
        })
        .catch((error) => {
            console.error("Error fetching users.json:", error);
            throw error;
        });
}

for (let i = 0; i < users.length; i++) {
    console.log("success");
    tableBox.innerHTML += `
        <tr>
            <td>${users[i].id}</td>
            <td>${users[i].name}</td>
            <td>${users[i].surname}</td>
            <td>${users[i].age}</td>
            <td>${users[i].faculty}</td>
            <td>
            <button class="delete-btn btn" onclick="deleteRow(this)">Delete</button>
            <button class="edit-btn btn">Edit</button>
            </td>
        </tr>`;
}
