import { Link } from "@tanstack/react-router";
import {MapIcon, PlusIcon, UserIcon} from "@heroicons/react/20/solid"

const itemClass =
  "flex flex-col items-center justify-center gap-1 h-16 rounded-[5px] text-center leading-none transition-all";
const iconClass = "size-6 shrink-0";

export default function Menu() {

  return (
    <footer className="flex h-30 shrink-0 items-center justify-center bg-linear-to-t from-torquise-400 to-transparent font-poppins text-center text-white">
      <nav className="flex w-full max-w-md items-center justify-center gap-x-5 px-4">
        <Link to="/map" className={`${itemClass} w-20`}>
          <MapIcon className={iconClass}/>
          Karte
        </Link>
        <Link to="/create/addPlace" className={`${itemClass} w-32 md:w-40 bg-coral-400 hover:bg-coral-200`}>
          <PlusIcon className={iconClass}/>
          Neuer Platz
        </Link>
        <Link to="/profile/profileSettings" className={`${itemClass} w-20`}>
          <UserIcon className={iconClass}/>
          Profil
        </Link>
      </nav>
    </footer>
  )
};
