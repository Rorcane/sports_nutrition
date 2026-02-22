function calculateBMI() {
   const weight = parseFloat(document.getElementById("weight").value);
   const height = parseFloat(document.getElementById("height").value) / 100;
   const age = document.getElementById("age").value;
   const bmi = weight / (height * height);
   
   let bmiResult = "calculator.php";
   if (bmi < 18.5) {
     bmiResult = "Көптеген адамдар бұл BMI өндіруінің құрылымында қателікке жол ашырады, себебі салмағы жоғары болмаған және тез бетіндегі кескіндерінде ұрғандықтан тері жоғалады.";
   } else if (bmi < 25) {
     bmiResult = "Сіздің BMI салмағыңызда қалаған жеріңізде тұрады. Жалғастыру үшін құрастыруларды және жогары көрсеткіштерді қолдануға дайын болыңыз.";
   } else if (bmi < 30) {
     bmiResult = "Сіздің BMI салмағыңызда жоғары болуы мүмкін. Жалғастыру үшін құрастыруларды және жогары көрсеткіштерді қолдануға дайын болыңыз.";
   } else {
     bmiResult = "Сіздің BMI салмағыңызда ашуы мүмкін. Жалғастыру үшін құрастыруларды және жогары көрсеткіштерді қолдануға дайын болыңыз.";
   }
   
   document.getElementById("result").innerHTML = `<p>Сіздің BMI: <strong>${bmi.toFixed(1)}</strong></p><p>${bmiResult}</p>`;
 }
 
 document.getElementById("bmiForm").addEventListener("submit", function(e) {
   e.preventDefault();
   calculateBMI();
 });
 

