import { createRootRoute, Outlet } from "@tanstack/react-router";
import { TanStackRouterDevtools } from "@tanstack/react-router-devtools";
import Menu from "../components/navigation/NavComponent";

export const Route = createRootRoute({
  component: () => (
    <>
      <main className="">
        <section>
          <Outlet />
        </section>
        <Menu />
      </main>
      <TanStackRouterDevtools />
    </>
  ),
});
