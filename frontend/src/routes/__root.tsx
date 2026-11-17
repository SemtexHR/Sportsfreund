import { createRootRoute, Link, Outlet } from "@tanstack/react-router";
import { TanStackRouterDevtools } from "@tanstack/react-router-devtools";

export const Route = createRootRoute({
  component: () => (
    <>
      <Outlet />
      <div>
        <Link to="/">Karte</Link>
        <Link to="/create">Neuer Platz</Link>
        <Link to="/profile">Profil</Link>
      </div>
      <TanStackRouterDevtools />
    </>
  ),
});
