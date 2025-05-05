document
  .getElementById("project-search")
  .addEventListener("input", function (e) {
    const searchTerm = e.target.value.toLowerCase();
    const projects = document.querySelectorAll(".project");

    projects.forEach((project) => {
      const title = project.getAttribute("data-title").toLowerCase();
      if (title.includes(searchTerm)) {
        project.style.display = "block"; // Show matching projects
      } else {
        project.style.display = "none"; // Hide non-matching projects
      }
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const formMessage = document.getElementById("form-message");
  
    form.addEventListener("submit", function (e) {
      e.preventDefault(); // stop normal form submit
  
      const formData = new FormData(form);
      const data = Object.fromEntries(formData.entries());
  
      fetch("https://formsubmit.co/ajax/ntile312@gmail.com", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Accept: "application/json",
        },
        body: JSON.stringify(data),
      })
        .then((res) => {
          if (!res.ok) throw new Error("Form submit failed");
          return res.json();
        })
        .then(() => {
          formMessage.textContent = "Message sent successfully!";
          formMessage.style.color = "#3fa2f6";
          form.reset();
        })
        .catch((error) => {
          formMessage.textContent = "Failed to send message. Try again.";
          formMessage.style.color = "red";
        });
    });
  });
  