const users = [
  {
    username: "std001",
    age: 33,
    program: "Computer Science",
    rank: "Intermediate"
  },
  {
    username: "std002",
    age: 33,
    program: "English",
    rank: "Advanced"
  },
  {
    username: "std003",
    age: 22,
    program: "Cybersecurity",
    rank: "Beginner"
  }
  // Add more users manually as needed
];

function displayUserInfo(loggedInUsername) {
  const userInfoDiv = document.getElementById("user-info");

  users.forEach(user => {
    if (user.username === loggedInUsername) {
      userInfoDiv.innerHTML = `
        <h3>User Information</h3>
        <p><strong>Age:</strong> ${user.age}</p>
        <p><strong>Program:</strong> ${user.program}</p>
        <p><strong>Rank:</strong> ${user.rank}</p>
      `;
    }
  });
}
