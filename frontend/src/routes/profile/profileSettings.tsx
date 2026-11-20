import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/profile/profileSettings')({
  component: RouteComponent,
})

function RouteComponent() {
  return <div>Hello "/profile/profileSettings"!</div>
}
