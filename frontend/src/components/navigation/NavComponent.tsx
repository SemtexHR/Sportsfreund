import { Link } from "@tanstack/react-router";

function Menu() {

  return (
    <nav className="flex w-100 justify-evenly font-poppins">
        <Link to="/Home/">Karte</Link>
        <Link to="/create/addPlace" >Neuer Platz</Link>
        <Link to="/profile/profileSettings">Profil</Link>
    </nav>
  )
}

export default Menu;
