function calculateBMI(weight, height) {
    const bmi = weight / (height ** 2);
    return bmi;
  }
  const weight1 = 70;  // in kilograms
  const height1 = 1.75;  // in meters
  
  const bmi1 = calculateBMI(weight1, height1);
  console.log(`BMI for weight ${weight1} kg and height ${height1} m: ${bmi1}`);
  
  const weight2 = 85;  // in kilograms
  const height2 = 1.80;  // in meters
  
  const bmi2 = calculateBMI(weight2, height2);
  console.log(`BMI for weight ${weight2} kg and height ${height2} m: ${bmi2}`);
  