import { createFileRoute } from "@tanstack/react-router";
import HeaderGradient from "../components/header/HeaderGradient";

export const Route = createFileRoute("/")({
  component: Index,
});

function Index() {
  return <div>
    <HeaderGradient title="Karte"/>
  </div>;
}
