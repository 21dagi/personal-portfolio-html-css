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
