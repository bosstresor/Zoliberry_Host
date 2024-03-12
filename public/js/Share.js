
const facebookButton = document.querySelector(".facebook_button")
const whatsappButton = document.querySelector(".whatsapp_button")
const twitterButton = document.querySelector(".twitter_button")

const init = () =>{
    let postUrl = encodeURI(document.location.href)
    const postImage = document.querySelector("#articles_profile")
    const postTitle = document.querySelector("#articles_title").innerText

    var twitterShareLink = "https://twitter.com/intent/tweet?url=" + postUrl + "&text=" + encodeURIComponent(postTitle);

    var articleData = {
        url: postUrl,
        title: postTitle,
        description: postTitle,
        image: postImage
      };

    document.getElementById("og-url").content = articleData.url;
    document.getElementById("og-title").content = articleData.title;
    document.getElementById("og-description").content = articleData.description;
    document.getElementById("og-image").content = articleData.image;

    document.getElementById("twitter-title").content = articleData.title;
    document.getElementById("twitter-description").content = articleData.description;
    document.getElementById("twitter-image").content = articleData.image;

    facebookButton.setAttribute(
        "href",
        `https://www.facebook.com/sharer.php?u=${postUrl}`
    )

    twitterButton.setAttribute(
        "href",
        twitterShareLink
    )

    [facebookButton, twitterButton].forEach(element => {
        element.setAttribute(
            "target",
            "_blank"
        )
    });
}


// 

const url = encodeURI(document.location.href)
const title = document.querySelector("#articles_profile")
const image = document.querySelector("#articles_title").innerText

whatsappButton.addEventListener("click", async (e) =>{

    if (!navigator.canShare) {
        output = `Your browser doesn't support the Web Share API.`;
      }


    if (navigator.canShare) {
        try {
            await navigator.share({
                url: url,
                title: title,
                text: title,
            });

            output = "Shared!";
            
        } catch (error) {
            output.textContent = `Error: ${error.message}`;
        }
    } else {
        output = `Your system doesn't support sharing these files.`;
    }


    window.alert(output);
})

init()