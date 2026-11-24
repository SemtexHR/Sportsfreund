import { createFileRoute, Outlet } from "@tanstack/react-router";
import Menu from "../components/navigation/NavComponent";

export const Route = createFileRoute("/_app")({
  component: AppLayout,
});

function AppLayout() {
  return (
    <main className="w-full h-full flex flex-col overflow-hidden">
      <section className="w-full flex-1 min-h-0 overflow-auto">
        <Outlet />
      </section>
      <Menu />
    </main>
  );
}
