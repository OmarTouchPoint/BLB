const contents = [
    "Your donations help fund our mentorship programs, allowing us to match Little Bows with supportive and understanding Big Bow mentors who share their gender identity, expression, and orientation.",
    "We offer educational workshops covering topics such as coping strategies, relapse prevention, and mental wellness. Your donations enable us to develop and facilitate these workshops, empowering our Little Bows with essential skills and knowledge for lasting sobriety.",
    "Your donations provide crucial financial assistance to Little Bows who are in need of LGBTQ+ affirming sober living and treatment centers. This ensures that every individual, regardless of their financial situation, has access to affirming care.",
    "We foster a supportive community where LGBTQ+ teens can connect with peers who understand and empathize with their experiences. Your donations help us organize community events, support groups, and online forums, creating a sense of belonging and connection for our Little Bows.",
    "We advocate for the rights and well-being of LGBTQ+ individuals in recovery, raising awareness and promoting policies that support affirming care and inclusivity. Your donations support our advocacy efforts, amplifying our voice and impact in the broader community."
];
const buttons = document.querySelectorAll('.button-boxed');

function showContent(index) {
    const contentParagraph = document.querySelector('.button-box-content');
    contentParagraph.textContent = contents[index];
    // Remove 'active' class from all buttons
    buttons.forEach(button => {
        button.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    buttons[index].classList.add('active');
}