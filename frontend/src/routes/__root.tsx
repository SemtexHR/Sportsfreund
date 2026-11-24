import { createRootRoute, Outlet } from "@tanstack/react-router";
import { TanStackRouterDevtools } from "@tanstack/react-router-devtools";
import Menu from "../components/navigation/NavComponent";

export const Route = createRootRoute({
  component: () => (
    <>
      <main className="w-full h-full flex flex-col overflow-hidden">
        <section className="w-full flex-1 min-h-0 overflow-auto">
          <Outlet />
        </section>
          <Menu/>
      </main>
      <TanStackRouterDevtools />
    </>
  ),
});
