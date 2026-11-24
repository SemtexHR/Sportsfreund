import { createFileRoute } from "@tanstack/react-router";
import HeaderGradient from "../../components/header/HeaderGradient";

export const Route = createFileRoute("/_app/map")({
  component: Map,
});

function Map() {
  return (
    <div>
      <HeaderGradient title="Karte" />
    </div>
  );
}
