function biodata(nama,umur,almt,hobi,status,sklh,skill,tertarik){
  var bio={
    name:nama,
    age:umur,
    address:almt,
    hobbies:hobi,
    is_married:status,
    list_scholl:sklh,
    skills:skill,
    interest_in_coding:tertarik
  };
  return JSON.stringify(bio);
}

nama="dian candra pribadi";
umur=23;
alamat="jalan panglima sudirman malang";
hobi=["traveling","diy microcontroler"];
status_nikah=false;
sekolah={name:"dian candra pribadi",year_in:2014,year_out:2018,major:"electrical Engineering"};
skill={skill_name:"microcontroler",level:"advanced"};
tertarik=true;

console.log(biodata(nama,umur,alamat,hobi,status_nikah,sekolah,skill,tertarik));
