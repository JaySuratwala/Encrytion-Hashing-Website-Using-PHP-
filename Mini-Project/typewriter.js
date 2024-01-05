const anothertext="As we move towards a digital age, cybercrimes have become more prevalent, and people have become complacent about their personal information. While some companies implement security measures to keep user data safe, many others do not. Cryptography is a simple yet effective solution that can be implemented to ensure data security by encrypting user details in a database. This can prevent attackers from understanding the contents even in the event of a breach."
let index1 = 0;
function typeWriter1() {
    if (index1 < anothertext.length) {
        document.getElementById("typewriter1").innerHTML += anothertext.charAt(index1);
        index1++;
        setTimeout(typeWriter1, 50); // adjust the speed of the typewriter effect by changing the value of the setTimeout function
    }
}
typeWriter1();
const text = "At E-Corp, we take password security very seriously. That's why we have developed a state-of-the-art encryption algorithm that encrypts and hashes user passwords, providing enhanced security for our clients' sensitive data.\n Our encryption algorithm takes input from users, encrypts and hashes their passwords, and stores the hash in a MySQL database. We have conducted extensive feasibility studies to ensure that the algorithm is effective, efficient, and secure, while also being user-friendly and compatible with existing systems.";
let index2 = 0;
function typeWriter2() {
    if (index2 < text.length) {
        document.getElementById("typewriter").innerHTML += text.charAt(index2);
        index2++;
        setTimeout(typeWriter2, 50); // adjust the speed of the typewriter effect by changing the value of the setTimeout function
    }
}
typeWriter2();