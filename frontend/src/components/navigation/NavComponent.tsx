import { Link } from "@tanstack/react-router";
import {MapIcon, PlusIcon, UserIcon} from "@heroicons/react/20/solid"

export default function Menu() {

  return (
    <footer className="flex h-30 shrink-0 bg-linear-to-t from-torquise-400 to-transparent font-poppins justify-center text-white">
      <nav className="flex gap-x-5 w-100  justify-center items-center">
        <Link to="/" className=" flex flex-col w-20 h-15 text-center items-center">
          <MapIcon className="w-5 md:w-6 lg:w-10"/>
          Karte
        </Link>
          <Link to="/create/addPlace" className=" flex flex-col w-30 md:w-30 lg:w-40 h-15 text-center bg-coral-400 items-center rounded-[5px] transition-all">
            <PlusIcon className="w-5 md:w-6 lg:w-10"/>
            Neuer Platz
          </Link>
        <Link to="/profile/profileSettings" className=" flex flex-col w-20 h-15 text-center items-center">
          <UserIcon className="w-5 md:w-6 lg:w-10"/>
          Profil
        </Link>
        </nav>
    </footer>
  )
};
