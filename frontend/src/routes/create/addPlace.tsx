import { createFileRoute } from '@tanstack/react-router'
import HeaderGradient from '../../components/header/HeaderGradient'

export const Route = createFileRoute('/create/addPlace')({
  component: RouteComponent,
})

function RouteComponent() {
  return <div>
    <HeaderGradient title='Sportplatz hinzufügen'/>
  </div>
}
