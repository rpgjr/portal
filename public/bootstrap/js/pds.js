const lastName = document.getElementById('lastName');
const firstName = document.getElementById('firstName');
const middleName = document.getElementById('middleName');
const gender = document.getElementById('gender');
const age = document.getElementById('age');
const bday = document.getElementById('bday');
const number = document.getElementById('number');
const email = document.getElementById('email');
const religion = document.getElementById('religion');
const courseID = document.getElementById('courseID');
const batch = document.getElementById('batch');
const cityAddress = document.getElementById('cityAddress');
const provincialAddress = document.getElementById('provincialAddress');
const fathersName = document.getElementById('fathersName');
const fathersNumber = document.getElementById('fathersNumber');
const mothersName = document.getElementById('mothersName');
const mothersNumber = document.getElementById('mothersNumber');
const btnNext = document.getElementById('btnNext');

const IsOutput = document.getElementById('IsOutput');

btnNext.onclick = function () {
    const lastName = lastName.value;lastName
    const firstName = firstName.value;
    const middleName = middleName.value;
    const gender = gender.value;
    const age = age.value;
    const bday = bday.value;
    const number = number.value;
    const email = email.value;
    const religion = religion.value;
    const courseID = courseID.value;
    const batch = batch.value;
    const cityAddress = cityAddress.value;
    const provincialAddress = provincialAddress.value;
    const fathersName = fathersName.value;
    const fathersNumber = fathersNumber.value;
    const mothersName = mothersName.value;
    const mothersNumber = mothersNumber.value;

    console.log(lastName);
    console.log(firstName);
    console.log(middleName);
    console.log(gender);
    console.log(age);
    console.log(bday);
    console.log(number);
    console.log(email);
    console.log(religion);
    console.log(courseID);
    console.log(batch);
    console.log(cityAddress);
    console.log(provincialAddress);
    console.log(fathersName);
    console.log(fathersNumber);
    console.log(mothersName);
    console.log(mothersNumber);

    localStorage.setItem(lastName, firstName, middleName, gender, age, bday, number, email, religion, courseID, batch, cityAddress, provincialAddress, fathersName, fathersNumber, mothersName, mothersNumber);
    location.reload();
}
