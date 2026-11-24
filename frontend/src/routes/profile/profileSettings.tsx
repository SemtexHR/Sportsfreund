import { createFileRoute } from '@tanstack/react-router'
import HeaderGradient from '../../components/header/HeaderGradient'

export const Route = createFileRoute('/profile/profileSettings')({
  component: RouteComponent,
})

function RouteComponent() {
  return <div>
    <HeaderGradient title='Profil' />
  </div>
}
