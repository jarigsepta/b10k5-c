function biodata(name, address, hobbies, is_married, school, skill) {

    let objek = {
        name: name,
        address: address,
        hobbies: hobbies,
        is_married: is_married,
        school: school,
        skill: skill
    }

    return JSON.stringify(objek)

}

console.log(biodata('Jarig Septa Junanto', 'Mendalan Gg. Gurami No. 10, Kec. Lamongan, Kab. Lamongan', ['Badminton', 'Bersepeda'], false, {
    "highschool": "SMAN 2 Lamongan",
    "university": "UPN Veteran Jawa Timur"
}, [{
    "name": "html",
    "score": "85"
}, {
    "name": "css",
    "score": "75"
}, {
    "name": "js",
    "score": "65"
}, {
    "name": "php",
    "score": "65"
}]))