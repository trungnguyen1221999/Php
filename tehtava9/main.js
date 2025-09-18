const dayList = document.querySelectorAll(".day");

dayList.forEach((day) => {
  day.addEventListener("click", () => {
    dayList.forEach((otherDay) => otherDay.classList.remove("active"));
    day.classList.add("active");
  });
});
