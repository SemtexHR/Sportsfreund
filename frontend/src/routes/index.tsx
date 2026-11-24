import { createFileRoute, Link } from "@tanstack/react-router";
import { gsap } from "gsap";
import { useGSAP } from "@gsap/react";
import mockup from "../assets/MockupSportsfreund.svg";

export const Route = createFileRoute("/")({
  component: Landing,
});




function Landing() {

  useGSAP(() => {
    gsap.fromTo("#logphn", {
      y: 300,
      autoAlpha: 0,
    },
    {
      y: 0,
      autoAlpha: 1,
      duration:1,
      ease: "expo.inOut"
    })
  })

  return (
    <div className="flex min-h-dvh flex-col items-center gap-6 overflow-hidden font-poppins bg-torquise-400">
      <div className="mt-15">
        <h2 className="font-jersey text-2xl text-white">SCHAU, WAS LÄUFT. ERLEB, WAS GEHT.</h2>
        <h1 className="font-jersey text-6xl text-white">SPORTSFREUND</h1>
      </div>

      <p className="font-poppins text-white text-center">
        Sportsfreund begleitet dich durch dein Sportleben.<br/>
        Check, auf welchem Platz was abgeht,<br/>
        trag dich ein und schon kann das Spiel beginnen.
      </p>

      <img
        src={mockup}
        alt="Handy mit der Ansicht von der Benutzeroberfläche von Sportsfreund"
        id="logphn"
        className="mt-auto mb-50 w-90 md:w-104 md:mb-70 h-auto"
      />

      <footer  className="relative z-10 -mt-80 md:-mt-120 flex w-full items-end justify-center
        bg-linear-to-t from-white to-transparent">
        <Link
          to="/auth/signin"
          className=" btn px-6 py-3 w-9/10 md:w-4/10 lg:3/10
          text-center text-white mb-10 transition-all"
        >
          in Sportsfreund durchstarten
        </Link>
      </footer>
    </div>
  );
}
