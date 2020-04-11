<template>
    <div class="green-content-box">
        <div class="green-content">
            <h1> Over ons </h1>
            <span> Wij zijn Karin & Renate Roetgerink, zussen, geboren en opgegroeid in Goor. Wij zijn in ons pand, gelegen in het centrum van Goor, ons bedrijf ’Werkplaats 75C’ gestart.
                <br>Met Werkplaats 75C willen wij ondernemers een plek bieden waar het fijn werken is en waar je met elkaar tot mooie en onverwachte resultaten kunt komen. </span>
            <div class="over">
                <div class="text">
                    Ik, Renate, ben in mijn werk vooral procesmatig bezig en heb jarenlang gewerkt als gebiedsmanager
                    bij
                    een
                    grote projectontwikkelaar. Momenteel werk ik onder meer als projectmanager bij een
                    fysiotherapiepraktijk
                    in
                    Ede.
                    Mijn ervaring is dat je door samenwerken vaak tot een beter resultaat komt. Andere inzichten maken
                    andere
                    oplossingen mogelijk.
                </div>
                <img width="88" height="87" class="image" src="/storage/img/renate.jpg" />

            </div>
            <div class="over">
                <img width="88" height="87" class="image" src="/storage/img/karin.jpg" />
                <div class="text">
                    Ik, Karin, ben architect. Daarnaast ben ik mij steeds meer bezig gaan houden met
                    interieur advies. Dit doe
                    ik
                    samen met Karin Olthoff van
                    <a href="https://www.blijblijwonen.nl/interieuradvies.html">
                        BlijBlij wonen</a>.
                    Het interieur van Werkplaats 75C laat zien dat je door duidelijke keuzes in materiaal
                    gebruik en kleur
                    in
                    een ‘kantoorruimte’ veel sfeer en een eigen identiteit kunt creëren. De inrichting
                    maakt flexibiliteit
                    in
                    werken mogelijk.
                </div>
            </div>
            <div class="footer">
                Wij hopen dat Werkplaats 75C een bruisende plek wordt waar je als creatieve ondernemer naast je werk ook
                de
                mogelijkheid hebt activiteiten te ondernemen met als doel te verbinden, te inspireren en te motiveren.
                <br />Een
                plek waar je met plezier naar toe gaat!
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OverOns"
    }
</script>

<style lang="scss" scoped>


    * {
        font-size   : 18px;
        line-height : 22px;

        @media ('max-width: 500px') {
            font-size : 14px;
        }
    }

    h1 {
        font-size   : 24px;
        line-height : 30px;
    }

    .over {
        display          : flex;
        flex-direction   : row;
        justify-content  : center;
        align-items      : center;
        margin           : 12px;
        background-color : rgba(0, 0, 0, .3);
        box-shadow       : 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

        a {
            text-decoration : underline;
            @media ('max-width: 1440px') {
                font-size : 14px;
            }
        }

        .image {
            display     : block;
            height      : 150px;
            width       : auto;
            margin      : 24px;
            margin-left : 36px;
            box-shadow  : 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            @media ('max-width : 500px') {
                display : none;
            }
        }

        .text {
            width       : 75%;
            margin      : 24px;
            font-size   : 18px;
            font-weight : 200;
            color       : white;

            @media ('max-width: 1440px') {
                font-size : 14px;
            }

        }
    }

    #text {
        width            : 75%;
        font-size        : 24px;
        background-color : rgb(32, 64, 37);
        color            : white;
        margin-top       : 112px;
        margin-bottom    : 222px;
        margin-right     : 142px;
        padding          : 12px;
        line-height      : 42px;


        @media ('max-width : 1440px') {
            font-size   : 14px;
            line-height : 30px;
        }
        @media ('max-width: 992px') {
            width   : 100%;
            margin  : 0;
            display : inline-block;
            height  : auto;
        }

        @media ('max-width : 500px') {
            font-size   : 18px;
            line-height : 24px;
        }
    }

    .green-content-box {
        font-size   : 1.5vw;
        line-height : 2.5vw;
        max-height  : 10vw;


        @media ('max-width : 500px') {
            font-size : 14px;
        }
    }

</style>
